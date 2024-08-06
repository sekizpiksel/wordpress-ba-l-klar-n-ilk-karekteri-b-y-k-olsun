(function() {
    wp.domReady(function() {
        wp.data.subscribe(function() {
            const title = wp.data.select("core/editor").getEditedPostAttribute("title");
            if (title) {
                const capitalizedTitle = title.replace(/\b\w/g, function(match) {
                    return match.toUpperCase();
                });
                if (title !== capitalizedTitle) {
                    wp.data.dispatch("core/editor").editPost({ title: capitalizedTitle });
                }
            }
        });
    });
})();
