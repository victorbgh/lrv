(function($) {
    var feed = new Instafeed({
        target: 'instafeed',
        resolution: 'standard_resolution',
        accessToken: 'IGQVJWeENVNlBKc2ZARQ0JwVEQ4MGdBMHhvLUxONXZA4ak9aS0RtS2hvbkoxMWNwRy1BX0VxMWViUkNxMEh0aGhGT2RDcUwwY2x2Vk1ndGhUanh1bnNtVXNDZA1VxcmR5anV0ZAUh4c1BsbTJBbV9HQmJCbAZDZD',
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