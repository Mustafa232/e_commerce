              		<div class="form-group">
              			<label for="{{ trans('admin.name') }}">{{ trans('admin.name') }}</label>
              				{!!
              	Form::text('name', null, [
              		'class' => 'form-control',
              		'placeholder' =>  trans('admin.name') ,
                            'required'
              	])
              	!!}
              	
                     @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
              </div>

              <div class="form-group">
                    <label for="{{ trans('admin.price') }}">{{ trans('admin.price') }}</label>
                      {!!
                Form::text('price', null, [
                  'class' => 'form-control',
                  'placeholder' =>  trans('admin.price') ,
                            'required'
                ])
                !!}
                
                     @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
              </div>

              @if(! isset($product))
              <div class="form-group">
                    <label for="{{ trans('admin.quantaty') }}">{{ trans('admin.quantaty') }}</label>
                      {!!
                Form::number('quantaty', null, [
                  'class' => 'form-control',
                  'placeholder' =>  trans('admin.quantaty') ,
                            'required'
                ])
                !!}
                
                     @if ($errors->has('quantaty'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quantaty') }}</strong>
                                    </span>
                                @endif
              </div>
              @endif

              <div class="form-group">
                                   <label for="{{ trans('admin.details') }}">{{ trans('admin.details') }}</label>
                                          {!!
                     Form::textarea('details', null, [
                            'class' => 'form-control ckeditor',
                            'placeholder' =>  trans('admin.details') ,
                            'required'
                     ])
                     !!}
                     
                     @if ($errors->has('details'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('details') }}</strong>
                                    </span>
                                @endif
              </div>

              <div class="form-group">
                                   <label for="{{ trans('admin.seo_desc') }}">{{ trans('admin.seo_desc') }}</label>
                                          {!!
                     Form::textarea('seo_desc', null, [
                            'class' => 'form-control',
                            'placeholder' =>  trans('admin.seo_desc') ,
                            'required'
                     ])
                     !!}
                     
                     @if ($errors->has('seo_desc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('seo_desc') }}</strong>
                                    </span>
                                @endif
              </div>

              <div class="form-group">
                                   <label for="{{ trans('admin.seo_keys') }}">{{ trans('admin.seo_keys') }}</label>
                                          {!!
                     Form::textarea('seo_keys', null, [
                            'class' => 'form-control',
                            'placeholder' =>  trans('admin.seo_keys') ,
                            'required'
                     ])
                     !!}
                     
                     @if ($errors->has('seo_keys'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('seo_keys') }}</strong>
                                    </span>
                                @endif
              </div>

              <div class="form-group">
                                   <label for="{{ trans('admin.image') }}">{{ trans('admin.image') }}</label>
                                          {!!
                     Form::file('image', null, [
                            'class' => 'form-control',
                     ])
                     !!}
                     
                     @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
              </div>

<div class="form-group">
                    <label for="{{ trans('admin.category_id') }}">{{ trans('admin.category_id') }}</label>
                      {!!
                Form::select('category_id', $categories, null, [
                  'class' => 'form-control',
                  'placeholder' =>  trans('admin.category_id') ,
                            'required'
                ])
                !!}
                
                     @if ($errors->has('category_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
              </div>

<div class="form-group">
                    <label for="{{ trans('admin.brand_id') }}">{{ trans('admin.brand_id') }}</label>
                      {!!
                Form::select('brand_id', $brands, null, [
                  'class' => 'form-control',
                  'placeholder' =>  trans('admin.brand_id') ,
                            'required'
                ])
                !!}
                
                     @if ($errors->has('brand_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('brand_id') }}</strong>
                                    </span>
                                @endif
              </div>