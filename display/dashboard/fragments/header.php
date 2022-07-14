<div id="mobile-wrapper" class="button-proxy">
    <div id="sidebar-box" class="nav">
        <div id="sidebar-header">
            <div id="label">
                <img class="active-logo" id="word-logo" src="/app/zdash/imgs/word_logo.svg" alt="School Ledger" width=70% height:auto>
                <img id="icon-logo" src="/app/zdash/imgs/icon_logo.svg" alt="School Ledger" width=70% height:auto>
            </div>
            <div id="xbutton">
                <button type="button" class="vicon-cancel-circle xbutton"></button>
            </div>
        </div>
        
        <div id="sidebar-content">           
            <div id="nav-wrapper">
                <div id="user-info">
                    <div id="prof-pic-con">
                        <div id="pic" class="vicon-user3"></div>
                    </div>
                    <div id="info-con">
                        <div><span style="font-weight:bold">Mr. John </span>Bill</div>
                        <div><span>Admin</span></div>
                    </div>
                </div>
                <!-- @section('sidebar') -->
                <div id="links-con">
                    <ul>
                        <li data-level="l1"><a id="dashboard" class="no-sub active cOff cloader" data-slug="/admin/dashboard" data-url="/cnt/admin/dashboard"  data-triggerOn="both" data-target="content" data-use-history data-family="dboard">Dashboard</a></li>
                        <li data-level="l1"><a id="settings" class="sub closed" data-slug="settings" data-family="dsetting">Settings</a>
                            <ul>
                                <li data-level="l2"><a class="no-sub cloader" data-slug="/admin/settings/school-info" data-url="/cnt/admin/settings/school-info"  data-triggerOn="click" data-use-history data-target="content">School info</a></li>
                                <li data-level="l2"><a class="no-sub">School session</a></li>
                                <li data-level="l2"><a class="no-sub">School branches</a></li>
                            </ul>
                        </li>
                        <li data-level="l1"><a class="sub closed" id="user-mgnt"  data-slug="user" data-family="duser">User management</a>
                            <ul>
                                <li data-level="l2"><a class="no-sub">Staff</a></li>
                                <li data-level="l2"><a class="no-sub">Students</a></li>
                                <li data-level="l2"><a class="no-sub">Guardians</a></li>
                            </ul>
                        </li>
                        <li data-level="l1"><a class="sub closed" id="class-mgnt" data-slug="class" data-family="dclass">Class management</a>
                            <ul>
                                <li data-level="l2"><a class="no-sub">All Classes</a></li>
                                <li data-level="l2"><a class="no-sub">Add Classes</a></li>
                            </ul>
                        </li>
                        <li data-level="l1"><a class="sub closed" id="subject-mgnt" data-slug="subject" data-family="dsubject">Subject managent</a>
                            <ul>
                                <li data-level="l2"><a class="no-sub">All subjects</a></li>
                                <li data-level="l2"><a class="no-sub">Add subject</a></li>
                            </ul>
                        </li>
                        <li data-level="l1"><a class="sub closed" id="attendance-mgnt">Attendance</a>
                            <ul>
                                <li data-level="l2"><a class="sub closed">Staff</a>
                                    <ul>
                                        <li data-level="l3"><a class="no-sub">Mark attendance</a></li>
                                        <li data-level="l3"><a class="no-sub">View Attendance</a></li>
                                    </ul>
                                </li>
                                <li data-level="l2"><a class="sub closed">Students</a>
                                    <ul>
                                        <li data-level="l3"><a class="no-sub">Mark attendance</a></li>
                                        <li data-level="l3"><a class="no-sub">View Attendance</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li data-level="l1"><a id="report-mgnt" class="sub closed" data-slug="report" data-family="dreport">Report</a>
                            <ul>
                                <li data-level="l2"><a class="no-sub">Assesment config</a></li>
                                <li data-level="l2"><a class="no-sub">Produce result</a></li>
                                <li data-level="l2"><a class="no-sub">Achive result</a></li>
                                <li data-level="l2"><a class="p2 sub closed">Tests..</a>
                                    <ul>
                                        <li data-level="l3"><a class="no-sub">Test 1</a></li>
                                        <li data-level="l3"><a class="no-sub">Test 2</a></li>
                                        <li data-level="l3"><a class="no-sub">Test 3</a></li>
                                    </ul>
                                </li>
                                <li data-level="l2">
                                    <a class="sub closed">Examples</a>
                                    <ul>
                                        <li data-level="l3"><a class="no-sub">Example 1</a></li>
                                        <li data-level="l3"><a class="sub closed">Example 2</a>
                                            <ul>
                                                <li data-level="l4"><a class="no-sub">Example 2 - 1</a></li>
                                                <li data-level="l4"><a class="sub closed">Example 2 - 2</a>
                                                    <ul>
                                                        <li data-level="l5"><a class="no-sub">Example 2 - 2 1</a></li>
                                                        <li data-level="l5"><a class="no-sub">Example 2 - 2 2</a></li>
                                                        <li data-level="l5"><a class="no-sub">Example 2 - 2 3</a></li>
                                                    </ul>
                                                </li>
                                                <li data-level="l4"><a class="no-sub">Example 2 - 3</a></li>
                                            </ul>
                                        </li>
                                        <li data-level="l3"><a class="no-sub">Example 3</a></li>
                                    </ul>
                                </li>
                                <li data-level="l2"><a class="no-sub">Demo...</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- @show  -->
            </div>
        </div>  
    </div>
</div>

<div id="content-box">
    <div id="header-box">
        <div id="header-content">
            <div id="menu">
                <button id="menu-button" class="menu-button opened"></button>
            </div>
            <div id="school-logo">
                <div id="s-logo" class="default"></div>
                <div id="s-label">
                    Demo school
                </div>
            </div>
            <div id="quick-action-buttons">
                <div id="actions">
                    <button type="button" id="userAction" class="no-profile-pic q-action" data-state="closed"></button>
                </div>
                <div id="actionContent">
                    <div data-for="userAction">
                        <div class="inner">
                            <a id="edit-profile" class="a-exit">Edit Profile</a>
                            <a href="/logout" id="logout" class="a-exit">Logout Profile</a>
                        </div>
                    </div>
                </div>                        
            </div>
        </div>
    </div>
    <div id="content">