var logout=Y.one("[data-title *= 'logout']").get("outerHTML");Y.one("#action-menu-1-menu").empty();Y.one("#action-menu-1-menu").append(logout);if(Y.one("nav.list-group a[href *= '/my/']")!=null){Y.one("nav.list-group a[href *= '/my/']").set("hidden","true")}
if(Y.one("nav.list-group a[href *= '/calendar/']")!=null){Y.one("nav.list-group a[href *= '/calendar/']").set("hidden","true")}
if(Y.one("nav.list-group a[href *= '/user/']")!=null){Y.one("nav.list-group a[href *= '/user/']").set("hidden","true")}
if(Y.one("a[href *= '/course/index.php']")!=null){Y.one("a[href *= '/course/index.php']").set("hidden","true")}
if(Y.one("#region-main-settings-menu")!=null){Y.one("#region-main-settings-menu").set("hidden","true")}