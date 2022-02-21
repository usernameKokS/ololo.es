<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const COST_SILVER = 29.99;
    const COST_GOLD = 99.95;
    const COST_DIAMOND = 299.95;

    // protected $dates = ['end_pay'];
    protected $fillable = ['autopay'];

    public function currentTariff() {
        if($this->id > 0)
            return \App\Tariff::where('post_id', $this->id)->where('status', '!=', 'wait')->latest();
        else
            return null;
    }

    public function childs()
    {
        return $this->hasMany('App\Avatar');
    }

    public static function getCost(string $tariff){
        switch($tariff){
            case 'Silver': return self::COST_SILVER; break;
            case 'Gold': return self::COST_GOLD; break;
            case 'Diamond': return self::COST_DIAMOND; break;
        }
    }

    public function getCountAvailableForModify()
    {
		return $this->modificar;
    }

    public function getCountAvailableForDelete()
    {
        return $this->eliminar;
    }

    public function getCurrTariff() {
        return Tariff::wherePostId($this->id)->where('status', '!=' , 'wait')->latest()->first();
    }

    public function getCurrAllTariff() {
        return Tariff::wherePostId($this->id)
            ->where([
                'active' => true
            ])
            ->where('status', '!=' , 'wait')
            ->get();
    }

    public function tariffsDeactive(){
        $tariffs = $this->getCurrAllTariff();
        if($tariffs != null)
            foreach($tariffs as $tariff)
            {
                $tariff->active = false;
                $tariff->eliminar = 1;
                $tariff->delete = 1;
                $tariff->save();
            }
    }

    public function isModifyTariff()
    {
        $tariff = Tariff::wherePostId($this->id)
            ->where([
                'status' => 'modificar'
            ])->first();
        if($tariff)    
            return true;
        return false;
    }

    public function isDeleteTariff()
    {
        $tariff = Tariff::wherePostId($this->id)
            ->where([
                'status' => 'eliminar'
            ])->first();
        if($tariff)    
            return true;
        return false;
    }

    public function tariffSetOneEdit()
    {
		$this->modificar--;
		
		if($this->modificar < 0)
			return false;
			
		$this->save();
		
        $tariff = Tariff::wherePostId($this->id)
        ->where([
            // 'modificar' => 0,
            // 'edit' => 0
        ])
        ->where('status', '!=' , 'wait')
        ->first();

        if($tariff)
        {
			$tariff->to_verify_at = \Carbon\Carbon::now();
			$tariff->status = 'approve';
            $tariff->save();

            // file
            file_get_contents('https://api.telegram.org/bot1336036063:AAHvoNmbG1jfcTWWb21CpjSbTLp4kj50n4Q/sendMessage?chat_id=-422910774&text=Approve+' . $this->id . ',+Tariff=' . $tariff->id . '(' . $tariff->name . ')');

            return true;
        }

        return false;
    }

    public function tariffSetToApprove()
    {
        $tariff = Tariff::wherePostId($this->id)
        ->where([
            // 'modificar' => 0,
            // 'edit' => 0
        ])
        ->where('status', '!=' , 'wait')
        ->first();

        if($tariff)
        {
			$tariff->to_verify_at = \Carbon\Carbon::now();
			$tariff->status = 'approve';
            $tariff->save();

            // file
            file_get_contents('https://api.telegram.org/bot1336036063:AAHvoNmbG1jfcTWWb21CpjSbTLp4kj50n4Q/sendMessage?chat_id=-422910774&text=Approve+' . $this->id. ',+Tariff=' . $tariff->id . '(' . $tariff->name . ')');

            return true;
        }

        return false;
    }

    public function tariffSetOneDelete()
    {
        if($this->publish)
        {
            $this->eliminar--;
		
            if($this->eliminar < 0)
                return false;
                
            $this->save();
        }
		
        $tariff = Tariff::wherePostId($this->id)
        ->where([
            // 'eliminar' => 0,
            // 'delete' => 0
        ])
        ->where('status', '!=' , 'wait')
        ->first();

        if($tariff)
        {
            $tariff->eliminar = 1;
            $tariff->delete = 1;
            $tariff->deleted_at = \Carbon\Carbon::now();
			$tariff->status = 'eliminar';
            
            $tariff->save();
        }

        return true;
    }

    public function tariffActive($value = false){
		
        $tariff = $this->getCurrTariff();
		
		if($tariff)
		{
			$tariff->active = $value;
        
			if($value && !empty($tariff->end))
			{
				$tariff->status = 'complete';
				$tariff->delete = 1;
			}

			$tariff->save();
		}
        
    }

    public function restoreTariff(){
        
        $tariff = Tariff::wherePostId($this->id)
            ->where([
                'eliminar' => 1
            ])
            ->whereNotNull('deleted_at')
            ->where('status', '!=' , 'wait')
            ->orderBy('deleted_at', 'desc')
            ->first();

		if($tariff)
        {
            if($tariff->deleted_at > \Carbon\Carbon::now()->subHours(1))
            {
                $tariff->deleted_at = null;
            }
    
            $tariff->active = true;
            $tariff->status = 'complete';
            $tariff->delete = 0;
    
            $tariff->save();
        }

    }

    public function ads(){
        return $this->hasMany(Ad::class)->whereStatus('active');
    }

    public function adsAll(){
        return $this->hasMany(Ad::class)->orderBy('status', 'asc');
    }

    public function forums(){
        return $this->hasMany(Forum::class)->where('status', 'active');
    }

}
