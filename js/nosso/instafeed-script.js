(function($) {
    var feed = new Instafeed({
        target: 'instafeed',
        resolution: 'standard_resolution',
        accessToken: 'IGQVJVM193NjBkMmlaOHR4dkFqWGFDVUpkVzM3dUNwUFVBNnZAKRE1aWmx0UjAxNFhpMTRvNkRGM2FYUmUyQUhxMGpoZAkpoNlVRMEVBU2FIb0lxeWxGa2d4ckg2UkEzUFY5d0lPcmFoLUNhVXc4VV9pZAgZDZD',
        template: '<a href="{{link}}" title="{{caption}}" target="_blank"><img alt="LRV publicação instagram {{timestamp}}" src="{{image}}" /><div class="rollover"></div></a>',
        limit: 12,
        debug: false,
        mock: false,
        resolution: 'standard_resolution',
        get: 'user',
        userId: '12265584617',
        clientId: '12265584617',
        filter: function(image) {
          return image.type === 'image';
         },
      });
      feed.run();

}(jQuery));