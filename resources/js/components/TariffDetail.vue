<template>
    <div class="show_tariff_detail">
		<modal width=380 height="auto" :name="'tariff_modal' + plan" :adaptive="true" :draggable="false" :scrollable="true">
		  <div class="appmodal">
			<div class="modal-container">
			  <div class="modal-header modal-header-notify">
				<img src="/img/delete.svg" v-on:click="hideModal" alt="icon" class="handleimg" />
				<h3>{{plan}} Tarifa</h3>
			  </div>
			</div>
			<div class="faux-borders" style="width: 70%;"></div>
			<div class="modal-container">
			  <div class="modal-body">
				<div class="notify-area">
					<div class="tariff-description" v-html="tariffdata[plan].text"></div>
					<div v-for="tariff in tariffsTransform" class="tariff-item">
						<div class="tariff-value">{{tariff.value}}</div>
						<div class="tariff-title">{{tariff.title}}</div>
					</div>
					<div class="tariff-autoren-description">Anuncios de PAGO auto-renovables</div>
					<div v-for="(count, domain) in tariffdata[plan].cost_portals" class="tariff-item">
						<div class="tariff-value">{{count}}</div>
						<div class="tariff-title">{{domain}}</div>
					</div>
				</div>
			  </div>
			</div>
		  </div>
		</modal>
	</div>
</template>

<script>
	import Notify from "./Notify";
    export default {
		props: {
			tariffs: Object,
			tariffdata: Object,
			plan: String
		},
		data () {
			return {
			  tariffsTransform: []
			}
		},
		methods: {
			hideModal()
			{
				this.$modal.hide('tariff_modal' + this.plan);
			},
			showModal()
			{
				this.$modal.show('tariff_modal' + this.plan);
			}
		},
        mounted() {
			for(let tariff of Object.entries(this.tariffs))
			{
				if(
					tariff[1][this.plan] != undefined
					&& tariff[1][this.plan] > 0
				)
					this.tariffsTransform.push({
						'title': tariff[0],
						'value': tariff[1][this.plan]
					});
			}

			let button = document.getElementById('buttonShowMore'+ this.plan);
			if(button != undefined)
				button.addEventListener('click', (e) => {
					this.showModal()
					e.preventDefault()
				});
        }
    };
</script>

<style lang="scss" scss>

	.show-more-link
	{
		height: 30px;
		/* padding-left: 48px; */
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: 13px;
		background-color: #fe6885;
		color: #ffffff;
		border-radius: 30px;
		margin-top: 10px;
		text-align: center;
		text-decoration: none;
	}

	.show-more-link:hover
	{
		color: #fff;
		text-decoration: none;
		background-color: #f2798f;
	}

	.tariff-description
	{
		text-align: left;
    	padding-left: 25px;
	}

	.tariff-autoren-description
	{
		text-align: left;
		padding: 15px 25px;
		font-weight: bold;
	}

    .tariff-item
	{
		display: flex;
		height: 30px;
		padding-left: 25px;
		border-bottom: 1px solid #dfdfdf;
		padding-top: 5px;
		font-size: 13px;

		.tariff-title
		{
			padding-left: 7px;
		}

		.tariff-value
		{
			color: #fe6885;
		}

		&:last-child
		{
			border:none;
		}
	}
</style>