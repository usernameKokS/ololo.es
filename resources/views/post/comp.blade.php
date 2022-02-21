<section>
	<div class="edit-wrap-section-sobre">
		<div class="container">
			<div class="wrap-icon7">

			</div>
			<div class="container container-two">
				<h2>Servicios</h2>
				<div class="sobre-wrapper">
					<div class="row">

						<div class="col-sm-12 col-md-6 col-lg-4">
							<div class="radio-wrap-area radio-wrap-area-editer" v-for="(service, index) in services.slice(0, 7)" :key="index + '-service1'">
								<label class="custom-control custom-radio" :class="{'pink-activ': (service.active == true)}">
									<input type="checkbox" :id="'service' + index" v-model="service.active" class="custom-control-input">
								<span class="custom-control-label" :for="'service' + index">@{{ service.name }}</span>
								</label>
								<div class="custom-options-wrapper" v-if="(service.options.length > 0) && (service.active)">
									<div class="option-border-left">
										<div class="radio-wrap-area" v-for="(option, index1) in service.options" :key="index1 + '-option1'">
											<label class="custom-control custom-radio" :class="{'pink-activ': (option.active == true)}">
												<input type="checkbox" :id="'option1' + index1" v-model="option.active" class="custom-control-input">
											<span class="custom-control-label" :for="'option1' + index1">@{{ option.name }} <img class="arrow-down" v-if="service.options.length > 0" src="/img/down.svg" width="20" alt="down"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-6 col-lg-4" >
							<div class="radio-wrap-area radio-wrap-area-editer" v-for="(service, index) in services.slice(7, 14)" :key="index + '-service2'">
								<label class="custom-control custom-radio" :class="{'pink-activ': (service.active == true)}">
									<input type="checkbox" :id="'service' + index" v-model="service.active" class="custom-control-input">
								<span class="custom-control-label" :for="'service' + index">@{{ service.name }} <img class="arrow-down" v-if="service.options.length > 0" src="/img/down.svg" width="20" alt="down"></span>
								</label>
								<div class="custom-options-wrapper" v-if="(service.options.length > 0) && (service.active)">
									<div class="option-border-left">
										<div class="radio-wrap-area" v-for="(option, index2) in service.options" :key="index2 + '-option2'">
											<label class="custom-control custom-radio" :class="{'pink-activ': (option.active == true)}">
												<input type="checkbox" :id="'option2' + index2" v-model="option.active" class="custom-control-input">
											<span class="custom-control-label" :for="'option2' + index2">@{{ option.name }}</span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-md-6 col-lg-4" >
							<div class="radio-wrap-area radio-wrap-area-editer" v-for="(service, index) in services.slice(14, 18)" :key="index + '-service3'">
								<label class="custom-control custom-radio" :class="{'pink-activ': (service.active == true)}">
									<input type="checkbox" :id="'service' + index" v-model="service.active" class="custom-control-input">
								<span class="custom-control-label" :for="'service' + index">@{{ service.name }} <img class="arrow-down" v-if="service.options.length > 0" src="/img/down.svg" width="20" alt="down"></span>
								</label>
								<div class="custom-options-wrapper" v-if="(service.options.length > 0) && (service.active)">
									<div class="option-border-left">
										<div class="radio-wrap-area" v-for="(option, index3) in service.options" :key="index3 + '-option3'">
											<label class="custom-control custom-radio" :class="{'pink-activ': (option.active == true)}">
												<input type="checkbox" :id="'option3' + index3" v-model="option.active" class="custom-control-input">
											<span class="custom-control-label" :for="'option3' + index3">@{{ option.name }}</span>
											</label>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>