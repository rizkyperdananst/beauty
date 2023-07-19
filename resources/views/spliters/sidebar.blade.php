<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
     <ul id="sidebarnav">
       <li class="nav-small-cap">
         <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
         <span class="hide-menu">Home</span>
       </li>
       <li class="sidebar-item">
         <a class="sidebar-link {{ (request()->is('admin/dashboard*')) ? 'active' : '' }}" href="{{ route('dashboard') }}" aria-expanded="false">
           <span>
             <i class="ti ti-layout-dashboard"></i>
           </span>
           <span class="hide-menu">Dashboard</span>
         </a>
       </li>
       <li class="nav-small-cap">
         <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
         <span class="hide-menu">Beauty</span>
       </li>
       <li class="sidebar-item">
         <a class="sidebar-link {{ (request()->is('admin/category-beauty*')) ? 'active' : '' }}" href="{{ route('category-beauty.index') }}" aria-expanded="false">
           <span>
             <i class="ti ti-article"></i>
           </span>
           <span class="hide-menu">Kategori Beauty</span>
         </a>
       </li>
       <li class="sidebar-item">
         <a class="sidebar-link {{ (request()->is('admin/beauty*')) ? 'active' : '' }}" href="{{ route('beauty.index') }}" aria-expanded="false">
           <span>
            <i class="ti ti-cards"></i>
           </span>
           <span class="hide-menu">Beauty</span>
         </a>
       </li>
       <li class="sidebar-item">
         <a class="sidebar-link {{ (request()->is('admin/disease*')) ? 'active' : '' }}" href="{{ route('disease.index') }}" aria-expanded="false">
           <span>
            <i class="ti ti-cards"></i>
           </span>
           <span class="hide-menu">Penyakit</span>
         </a>
       </li>
       {{-- <li class="sidebar-item">
         <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
           <span>
             <i class="ti ti-alert-circle"></i>
           </span>
           <span class="hide-menu">Alerts</span>
         </a>
       </li>
       <li class="sidebar-item">
         <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
           <span>
             <i class="ti ti-cards"></i>
           </span>
           <span class="hide-menu">Card</span>
         </a>
       </li>
       <li class="sidebar-item">
         <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
           <span>
             <i class="ti ti-file-description"></i>
           </span>
           <span class="hide-menu">Forms</span>
         </a>
       </li>
       <li class="sidebar-item">
         <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
           <span>
             <i class="ti ti-typography"></i>
           </span>
           <span class="hide-menu">Typography</span>
         </a>
       </li> --}}
       <li class="nav-small-cap">
         <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
         <span class="hide-menu">Setting</span>
       </li>
       <li class="sidebar-item">
         <a class="sidebar-link {{ (request()->is('admin/user*')) ? 'active' : '' }}" href="{{ route('user.index') }}" aria-expanded="false">
           <span>
             <i class="ti ti-login"></i>
           </span>
           <span class="hide-menu">Akun</span>
         </a>
       </li>
       {{-- <li class="sidebar-item">
         <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
           <span>
             <i class="ti ti-user-plus"></i>
           </span>
           <span class="hide-menu">Register</span>
         </a>
       </li>
       <li class="nav-small-cap">
         <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
         <span class="hide-menu">EXTRA</span>
       </li>
       <li class="sidebar-item">
         <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
           <span>
             <i class="ti ti-mood-happy"></i>
           </span>
           <span class="hide-menu">Icons</span>
         </a>
       </li>
       <li class="sidebar-item">
         <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
           <span>
             <i class="ti ti-aperture"></i>
           </span>
           <span class="hide-menu">Sample Page</span>
         </a>
       </li> --}}
     </ul>
   </nav>