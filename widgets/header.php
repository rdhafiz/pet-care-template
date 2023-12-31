
<nav class="navbar navbar-expand-lg fw-bold fixed-top" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="javascript:void(0)">
            <img src="assets/images/logo.png" class="img-fluid logo-res" alt="logo">
        </a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Promo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-0" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <img src="assets/images/Search.png" class="search-icon img-fluid" alt="search icon">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- search modal start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h1 class="modal-title px-3 fs-5" id="searchModalLabel">Search here</h1>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5">
                <form class="px-3">
                    <input type="text" name="search" class="form-control" placeholder="Search Here" required>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- search modal end -->
