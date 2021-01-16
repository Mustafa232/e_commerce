              		<div class="form-group">
              			<label for="{{ trans('admin.title') }}">{{ trans('admin.title') }}</label>
              				{!!
              	Form::text('title', null, [
              		'class' => 'form-control',
              		'placeholder' =>  trans('admin.title') ,
                            'required'
              	])
              	!!}
              	
                     @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
              </div>

              <div class="form-group">
                                   <label for="{{ trans('admin.content') }}">{{ trans('admin.content') }}</label>
                                          {!!
                     Form::textarea('content', null, [
                            'class' => 'form-control ckeditor',
                            'placeholder' =>  trans('admin.content') ,
                            'required'
                     ])
                     !!}
                     
                     @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
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



