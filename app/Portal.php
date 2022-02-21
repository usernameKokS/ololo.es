<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class Portal extends Model
{
    public function fillStatuses($postId = null)
    {
        /**
         * 
         * Приоритет применимости от важного к менее важному:
         * Proximamente > No publicado > Eliminando > Modificando > Revisar > Publicado > Renovando > Publicando
         */
        $user = Auth::user();

        $postData = $postCurrentTariff = null;

		if($postId)
		{
			$postData = Post::where('id', $postId)->first();	
            $postCurrentTariff = $postData->getCurrTariff();
            
            $isModifyTariff = $postData->isModifyTariff();
            $isDeleteTariff = $postData->isDeleteTariff();
		}

        $portal_ad = Ad::where('site', $this->site)
        ->where('status', 'active')
        ->where('user_id', $user->id);
        
        if ($postId) {
            $portal_ad->wherePostId($postId);
        }else {
            $portal_ad->whereIn('id', $user->getPostsId());
        }

        $this->attentionMessage = '';

        $portal_ad = $portal_ad->get();

        if (count($portal_ad) < $this->value) {
            $this->statustwo = 'Publicando';
            $this->attentionMessage = 'Los anuncios estan publicando.';
        }

        $portalAdCount = $portal_ad->count();

        if($portalAdCount >= $this->value)
        {
            $this->statustwo = 'Renovando';
            $this->attentionMessage = 'En este portal para que tu anuncio se renueve, nosotros eliminamos antiguo y ponemos uno nuevo cada 24 horas.';
        }
    
    
        /*if($this->site == 'Destacamos.com' && $postCurrentTariff && $postCurrentTariff->destacamos_status="repeatTelephone")
        {
            $this->attentionMessage = 'No es posible publicar los anuncios, ya que tiene anuncios activos en esta web. <a href="http://www.destacamos.com/telefono-' .$postData->phone . '/listings.html" target="_blank">Elimina los anuncios antiguos</a>, y nosotros podremos publicar de froma automática.';
            $this->statustwo = 'Renovando';
        }*/

        if (count($portal_ad) >= $this->value) {
            $this->statustwo = 'Publicado';
            $this->attentionMessage = 'Todos los anuncios se renuevan cada 24 horas.';
        }

        if($postId && strlen($this->site) > 0)
        {   
            $prefix = null;

            if(strstr($this->site, '.'))
                $prefix = explode('.', $this->site);

            if($postCurrentTariff && $postCurrentTariff->destacamos_status=="repeatTelephone" && $this->site == 'Destacamos.com')
            {
                $this->attentionMessage = 'No es posible publicar los anuncios, ya que tiene anuncios activos en esta web. <a href="http://www.destacamos.com/telefono-' .$postData->phone . '/listings.html" target="_blank">Elimina los anuncios antiguos</a>, y nosotros podremos publicar de froma automática.';
                $this->statustwo = 'Revisar';
            }
            elseif(
                $postCurrentTariff 
                && isset($prefix[0])
                && isset($postCurrentTariff[strtolower($prefix[0]) . '_status'])
            )
            {
                $descStatuses = \App\DescriptionStatus::get();
                $statuses = [];
                
                if($descStatuses)
                    foreach($descStatuses as $status)
                        $statuses[$status->code] = $status->text;
                if(
                    sizeof($statuses) > 0
                    && isset($statuses[$postCurrentTariff[strtolower($prefix[0]) . '_status']])
                )
                {
                    $this->attentionMessage = $statuses[$postCurrentTariff[strtolower($prefix[0]) . '_status']];
                    $this->statustwo = 'Revisar';
                }
            }
        }

        /*if($postId)
        {
            if($isModifyTariff)
            {
                $this->statustwo = 'Modificando';
                $this->attentionMessage = 'Todos tus anuncios se modificaran en 24 horas.';
            }
            
            if($isDeleteTariff)
            {
                $this->statustwo = 'Eliminando';
                $this->attentionMessage = 'Todos* tus anuncios se eliminaran en 24 horas.';
            }
        }*/
        
        $portal_ad = Ad::where('site', $this->site)
            ->whereIn('status', ['active', 'delete'])
            ->where('user_id', $user->id)
            ->whereDate('updated_at', '>', Carbon::now()->subDays(1));

        if ($postId) {
            $portal_ad->wherePostId($postId);
        }else {
            $portal_ad->whereIn('id', $user->getPostsId());
        }

        if ($this->status == false) 
        {
            $this->statustwo = 'No publicado';
            $this->attentionMessage = 'No se publican anuncios en este portal.';
        }

        if ($this->proximamente  == 1)
        {
            $this->statustwo = 'Proximamente';
            $this->attentionMessage = 'Proximamente este portal estara disponible para publicar tus anuncios.';
        }
    }    
}
