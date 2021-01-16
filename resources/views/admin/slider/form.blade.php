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



