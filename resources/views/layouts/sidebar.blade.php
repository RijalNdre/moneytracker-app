<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('transactions') ? 'active' : ''}}" href="/transactions">
                    <span data-feather="shopping-cart"></span>
                    Transactions
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('reports') ? 'active' : ''}}" href="/reports">
                    <span data-feather="archive"></span>
                    Reports
                </a>
            </li>
            </li>
        </ul>
    </div>
</nav>