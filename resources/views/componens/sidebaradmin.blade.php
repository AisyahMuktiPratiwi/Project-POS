<link href="https://fonts.googleapis.com/css2?family=Ewert&family=Kranky&display=swap" rel="stylesheet">
<aside id="sidebar-wrapper" >
          <div class="sidebar-brand" style="background-color: rgb(255, 81, 0)">
            <a href="/" style="font-family:'Kranky', cursive;color:white;font-size:16px;">Kedai Uncle Mutho</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm" >
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu" style="background-color:rgb(255, 226, 183)">
              <li class="menu-header"style="color: rgb(255, 0, 0)"><a class="nav-link" href="{{ route('dashboard.index') }}"><span style="color: rgb(255, 0, 0) ">Dashboard</span> </a></li>

              <li class="menu-header"style="color: rgb(255, 0, 0)">Data Menu</li>
              @if(Auth::user()->is_admin =='admin')


              <li><a class="nav-link" href="{{ route('category.index') }}"><i class="fa fa-list-alt" aria-hidden="true" style="color: rgb(255, 0, 0)"></i><span style="color: rgb(255, 0, 0)">Data Category</span></a></li>
              <li><a class="nav-link" href="{{ route('product.index') }}"> <i class="nav-icon fas fa-th" style="color: rgb(255, 0, 0)"></i><span style="color: rgb(255, 0, 0)">Data Product</span></a></li>
              <li><a class="nav-link" href="{{ route('order.index') }}"><i class="fas fa-shopping-bag" style="color: rgb(255, 0, 0)"></i><span style="color: rgb(255, 0, 0)">Order</span></a></li>
              <li><a class="nav-link" href=""><i class="fas fa-money-check"style="color: rgb(255, 0, 0)"></i>
                <span style="color: rgb(255, 0, 0)">Transaction</span></a></li>

              @elseif(Auth::user()->is_admin == 'kasir')
            <li><a class="nav-link" href="{{ route('order.index') }}"><i class="fas fa-shopping-bag" style="color: rgb(255, 0, 0)"></i><span style="color: rgb(255, 0, 0)">Order</span></a></li>
              <li><a class="nav-link" href=""><i class="fas fa-money-check"style="color: rgb(255, 0, 0)"></i>
                <span style="color: rgb(255, 0, 0)">Transaction</span></a></li>
                @endif
            </ul>


        </aside>
