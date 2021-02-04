(function($) {
    var feed = new Instafeed({
        target: 'instafeed',
        resolution: 'standard_resolution',
        accessToken: 'IGQVJVazJ4c0x6WnBqU01vbkQ2ZAURjX0VvcWoyaWpUOUdkaHVtVFl3bC1pNnZAfbkVJVjdFZAk1FMmhRTE1DX0ppbUFqOUhMaFlHU1hINkxUYm1XckRTeWVyLVpmbHo1ZAWEyTUNqV2lkem5XRWVFREUtVAZDZD',
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