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
                                   <label for="{{ trans('admin.username') }}">{{ trans('admin.username') }}</label>
                                          {!!
                     Form::text('username', null, [
                            'class' => 'form-control',
                            'placeholder' =>  trans('admin.username') ,
                            'required'
                     ])
                     !!}
                     
                     @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
              </div>

              <div class="form-group">
                                   <label for="{{ trans('admin.email') }}">{{ trans('admin.email') }}</label>
                                          {!!
                     Form::email('email', null, [
                            'class' => 'form-control',
                            'placeholder' =>  trans('admin.email') ,
                            'required'
                     ])
                     !!}
                     
                     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
              </div>

              <div class="form-group">
                                   <label for="{{ trans('admin.role') }}">{{ trans('admin.role') }}</label>
                                          {!!
                     Form::select('isAdmin', roles(), null, [
                            'class' => 'form-control',
                            'placeholder' =>  trans('admin.role') ,
                            'required'
                     ])
                     !!}
                     
                     @if ($errors->has('isAdmin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isAdmin') }}</strong>
                                    </span>
                                @endif
              </div>

@if(! isset($user))
       <div class="form-group">
                                   <label for="{{ trans('admin.password') }}">{{ trans('admin.password') }}</label>
                                          {!!
                     Form::password('password', [
                            'class' => 'form-control',
                            'placeholder' =>  trans('admin.password') ,
                            'required'
                     ])
                     !!}
                     
                     @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
              </div>
@endif

