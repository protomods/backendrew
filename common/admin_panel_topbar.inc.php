<?php

    /*!
	 * POCKET v1.1
	 *
	 * http://droid.oxywebs.in
	 * droid@oxywebs.com, yash@oxywebs.com
	 *
	 * Copyright 2016 yashDev (http://yash.oxywebs.in/)
 */


    if (!admin::isSession()) {

        ?>

            <div id="page_topbar">

                <div class="topbar">
                    <div class="content">
                        <a href="/" class="logo"></a>

                        <div style="float: right">
                            <a href="/admin/login.php" class="topbar_item">Log in</a>
                        </div>
                    </div>
                </div>

            </div>
        <?php

    } else {

        ?>

            <div id="page_topbar">

                <div class="topbar">
                    <div class="content">
                        <a href="/admin.php" class="logo"></a>

                        <div style="float: right">
                            <a href="/users.php" class="topbar_item">Go Back</a>
                            <a href="/admin/logout.php/?access_token=<?php echo admin::getAccessToken(); ?>&continue=/" class="topbar_item">Logout</a>
                        </div>
                    </div>
                </div>

            </div>
        <?php
    }
?>