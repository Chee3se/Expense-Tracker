<nav class="flex flex-row pl-12 p-4 gap-8">
    <a href="/" class="hover:text-blue-800 transform duration-100 {{ request()->is('/') ? 'underline decoration-1' : '' }}">Home</a>
    <a href="/expenses" class="hover:text-blue-800 transform duration-100 {{ request()->is('expenses') ? 'underline decoration-1' : '' }}">Expenses</a>
    <a href="/categories" class="hover:text-blue-800 transform duration-100 {{ request()->is('categories') ? 'underline decoration-1' : '' }}">Categories</a>
</nav>
