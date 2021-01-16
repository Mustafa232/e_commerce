<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
      
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          @if(getContact('count') > 0)
          <span class="badge badge-success navbar-badge">{{ getContact('count') }}</span>
          @endif
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          @forelse(getContact() as $message)
          <a href="{{ route('contact.show', $message->id) }}" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{url('/')}}/panel/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  {{ $message->subject }}
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">{{ str_limit($message->message, 100) }}</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> {{ $message->created_at->diffForHumans() }}</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          @empty
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                
                <p class="text-sm">{{ trans('admin.nodata') }}</p>
                
              </div>
            </div>
            <!-- Message End -->
          </a>
          @endforelse
          
          <div class="dropdown-divider"></div>
          <a href="{{ route('contact.index') }}" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
@if(getOrder('count') > 0)
          <span class="badge badge-danger navbar-badge">{{ getOrder('count') }}</span>
          @endif          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> {{ getOrder('count') }} new orders
          </a>
          <div class="dropdown-divider"></div>
          @foreach(getOrder() as $order)
          <a href="{{ route('order.show', $order->id) }}" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> {{ $order->user->name }}
          </a>
          @endforeach
          <div class="dropdown-divider"></div>
          <a href="{{ route('order.index') }}" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->