<li class="{{ Request::is('kinders*') ? 'active' : '' }}">
    <a href="{{ route('kinders.index') }}"><i class="fa fa-edit"></i><span>Kinders</span></a>
</li>

<li class="{{ Request::is('kinder_news*') ? 'active' : '' }}">
    <a href="{{ route('kinderNews.index') }}"><i class="fa fa-edit"></i><span>KinderNews</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('courses*') ? 'active' : '' }}">
    <a href="{{ route('courses.index') }}"><i class="fa fa-edit"></i><span>Courses</span></a>
</li>

<li class="{{ Request::is('teachers*') ? 'active' : '' }}">
    <a href="{{ route('teachers.index') }}"><i class="fa fa-edit"></i><span>Teachers</span></a>
</li>

<li class="{{ Request::is('parents*') ? 'active' : '' }}">
    <a href="{{ route('parents.index') }}"><i class="fa fa-edit"></i><span>Parents</span></a>
</li>