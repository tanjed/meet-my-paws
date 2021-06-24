<div class="sidebar-v1 is-fold">
    <div class="top-section">
        <button id="sidebar-v1-close" class="close-button">
            <i data-feather="arrow-left"></i>
        </button>
        <div class="field is-grouped">
            <div class="control">
                <input id="tipue_drop_input" class="input" placeholder="Search...">
                <div class="form-icon">
                    <i data-feather="search"></i>
                </div>
                <div id="tipue_drop_content" class="tipue-drop-content"></div>
            </div>
        </div>
        @if(Auth::guard('pet_owner')->check())
        <div class="user-block">
            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="/assets/img/demo/groups/1.jpg" alt="">
            <div class="meta">

                <span>{{Auth::guard('pet_owner')->user()->name}}</span>
                <span>{{Auth::guard('pet_owner')->user()->user_role}}</span>


            </div>
        </div>
        @elseif(Auth::guard('funder')->check())
        <div class="user-block">
            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="/assets/img/demo/groups/1.jpg" alt="">
            <div class="meta">
                <span>{{Auth::guard('funder')->user()->name}}</span>
                <span>{{Auth::guard('funder')->user()->user_role}}</span>
            </div>
        </div>
        @endif
    </div>
    <div class="bottom-section">
        @if(Auth::guard('pet_owner')->check())
        <ul>
            <li>
                <a href="/" class="is-active">
                    <i data-feather="clock"></i>
                    <span>Timeline</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i data-feather="image"></i>
                    <span>Photos</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i data-feather="image"></i>
                    <span>Videos</span>
                </a>
            </li>

        </ul>
        @endif
        <ul>

            <li>
                <a href="/logout">
                    <i data-feather="log-out"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
