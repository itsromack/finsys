<div class="ui visible inverted left vertical sidebar menu">
  <a class="ui image large centered item" href="#">
    <img src="/images/erc-logo.jpg">
  </a>
  @if (!Auth::guest())
  <h3>
    <a href="#" class="item centered" data-toggle="dropdown" role="button" aria-expanded="false">
        {{ Auth::user()->name }}
    </a>
  </h3>
  @endif
  <a class="item" href="/dashboard">
    <i class="dashboard icon"></i>
    Dashboard
  </a>
  <a class="item" href="/sa">
    <i class="book layout icon"></i>
    Statement of Accounts
  </a>
  <a class="item" href="/po">
    <i class="book layout icon"></i>
    Purchase Orders
  </a>
  <a class="item" href="/payments">
    <i class="book layout icon"></i>
    Payments
  </a>
  <a class="item" href="/funds">
    <i class="book layout icon"></i>
    Funds Tracking
  </a>
  <a class="item" href="/balance">
    <i class="book layout icon"></i>
    Balance Sheet
  </a>

  <a class="item" href="/clients">
    <i class="users icon"></i>
    Clients
  </a>
  <a class="item" href="/suppliers">
    <i class="users icon"></i>
    Suppliers
  </a>

  @if (!Auth::guest())
    <a class="item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
      <i class="icon sign out"></i>
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
  @endif
</div>