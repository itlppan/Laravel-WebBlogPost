<nav>
    <ul class="nav nav-tabs bg-dark justify-content-center fixed-top mb-3">
        <li class="nav-item">
          <a class="nav-link {{ $title == "Home" ? "active" : "" }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $title == "All Posts" ? "active" : "" }}" href="/posts">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $title == "About" ? "active" : "" }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $title == "Categories" ? "active" : "" }}" href="/categories">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $title == "Author" ? "active" : "" }}" href="/authors">Author</a>
        </li>
      </ul>
</nav>
