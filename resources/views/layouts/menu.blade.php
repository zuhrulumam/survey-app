<li class="{{ Request::is('questions*') ? 'active' : '' }}">
    <a href="{!! route('questions.index') !!}"><i class="fa fa-edit"></i><span>Questions</span></a>
</li>

<li class="{{ Request::is('userQuestions*') ? 'active' : '' }}">
    <a href="{!! route('userQuestions.index') !!}"><i class="fa fa-edit"></i><span>UserQuestions</span></a>
</li>

<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{!! route('categories.index') !!}"><i class="fa fa-edit"></i><span>Categories</span></a>
</li>

<li class="{{ Request::is('subCategories*') ? 'active' : '' }}">
    <a href="{!! route('subCategories.index') !!}"><i class="fa fa-edit"></i><span>SubCategories</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('dataDosens*') ? 'active' : '' }}">
    <a href="{!! route('dataDosens.index') !!}"><i class="fa fa-edit"></i><span>DataDosens</span></a>
</li>

<li class="{{ Request::is('dataDosens*') ? 'active' : '' }}">
    <a href="{!! route('dataDosens.index') !!}"><i class="fa fa-edit"></i><span>DataDosens</span></a>
</li>

