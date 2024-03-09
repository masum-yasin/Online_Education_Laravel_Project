<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="{{asset('assets/images/logo.svg')}}" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{asset('assets/images/logo-mini.svg')}}" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="{{asset('assets/images/faces/face15.jpg')}}" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Online Education</h5>
              <span>Gold Member</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-calendar-today text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="index.html">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
{{-- Course Category --}}
      @if(Auth::guard('instructor')->Check())
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Course Category</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href=" {{route('category.create')}}">Add Course Category </a></li>
  
           
            <li class="nav-item"> <a class="nav-link" href=" {{route('category.index')}}">All Course Category List</a></li>
        
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#topic" aria-expanded="false" aria-controls="topic">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Course Topic</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="topic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href=" {{route('topic.create')}}">
              Add Course Topic</a></li>
          <li class="nav-item"> <a class="nav-link" href=" {{route('topic.index')}}">All Course Topic</a></li>
        </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#topic" aria-expanded="false" aria-controls="topic">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Course Topic</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="topic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href=" {{route('topic.create')}}">
              Add Course Topic</a></li>
          <li class="nav-item"> <a class="nav-link" href=" {{route('topic.index')}}">All Course Topic</a></li>
        </ul>
        </div>
      </li>

      @elseif(Auth::guard('editor')->Check())
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Course Category</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href=" {{route('category.create')}}">Add Course Category </a></li>
  
           
            <li class="nav-item"> <a class="nav-link" href=" {{route('category.index')}}">All Course Category List</a></li>
        
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#topic" aria-expanded="false" aria-controls="topic">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Course Topic</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="topic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href=" {{route('topic.create')}}">
              Add Course Topic</a></li>
          <li class="nav-item"> <a class="nav-link" href=" {{route('topic.index')}}">All Course Topic</a></li>
        </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#topic" aria-expanded="false" aria-controls="topic">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Course Topic</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="topic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href=" {{route('topic.create')}}">
              Add Course Topic</a></li>
          <li class="nav-item"> <a class="nav-link" href=" {{route('topic.index')}}">All Course Topic</a></li>
        </ul>
        </div>
      </li>
{{-- ============================super admin================ --}}

@else

      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Course Category</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href=" {{route('category.create')}}">Add Course Category </a></li>
  
           
            <li class="nav-item"> <a class="nav-link" href=" {{route('category.index')}}">All Course Category List</a></li>
        
          </ul>
        </div>
      </li>

      {{-- Category Routing --}}
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Courses Details</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href=" {{route('course.create')}}">Add New Course Detail</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('course.index')}}">All Course Details</a></li>
         
          </ul>
        </div>
      </li>
     

      {{-- Student Course Routing --}}
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#scategory" aria-expanded="false" aria-controls="scourse">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Student Course</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="scategory">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href=" {{route('scourse.create')}}">
              
              Student Course</a></li>
          
           
            <li class="nav-item"> <a class="nav-link" href=" {{route('scourse.index')}}">All Student Course </a></li>
        
          </ul>
        </div>
      </li>


      {{-- Schedule Course Routing --}}

      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#schedule" aria-expanded="false" aria-controls="schedule">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Course Schedule</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="schedule">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href=" {{route('schedule.create')}}">
              
              Schedule</a></li>
          
           
            <li class="nav-item"> <a class="nav-link" href=" {{route('schedule.index')}}">All Student Scheudle</a></li>
        
          </ul>
        </div>
      </li>

      {{-- Course Lesson --}}
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#lesson" aria-expanded="false" aria-controls="lesson">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Course Lesson</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="lesson">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href=" {{route('lesson.create')}}">
            Add Course Lesson</a></li>
          <li class="nav-item"> <a class="nav-link" href=" {{route('lesson.index')}}">All Course Lesson</a></li>
          </ul>
        </div>
      </li>
      {{-- route for topic --}}
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#topic" aria-expanded="false" aria-controls="topic">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Course Topic</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="topic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href=" {{route('topic.create')}}">
              Add Course Topic</a></li>
          <li class="nav-item"> <a class="nav-link" href=" {{route('topic.index')}}">All Course Topic</a></li>
        </ul>
        </div>
      </li>
      {{-- Course Instructor --}}
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#instructor" aria-expanded="false" aria-controls="instructor">
          <span class="menu-icon">
            <i class="mdi mdi-security"></i>
          </span>
          <span class="menu-title">Course Instructor</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="instructor">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href=" {{route('instructor.create')}}">
              Add Course Instructor</a></li>
          <li class="nav-item"> <a class="nav-link" href=" {{route('instructor.index')}}">All Course Instructor</a></li>
        </ul>
        </div>
      </li>
      @endif



      
      
     
      
     
      
     
      
      <li class="nav-item menu-items">
        <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Documentation</span>
        </a>
      </li>
    </ul>
  </nav>