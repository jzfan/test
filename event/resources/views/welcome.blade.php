<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        {{-- <link href="https://fonts.useso.com/css?family=Lato:100" rel="stylesheet" type="text/css"> --}}

    </head>
    <body>
        <h1>welcome</h1>

        <ul id='users'>
            <li v-for="user in users">@{{ user.name }}</li>
        </ul>

        <script src="//cdn.bootcss.com/pusher/3.0.0/pusher.min.js"></script>
        <script src="//cdn.bootcss.com/vue/1.0.11/vue.min.js"></script>
        <script type="text/javascript">

            //  var pusher = new Pusher('2b65bc0f1daecf9442d1', {
            //   encrypted: true
            // });
            // var channel = pusher.subscribe('test');
            // channel.bind('App\\Events\\UserHasRegistered', function(data) {
            //   console.log(data);
            // });
    new Vue({
        el: '#users',

        data: {
            users: []
        },

        ready: function(){
                var pusher = new Pusher('2b65bc0f1daecf9442d1', {
                  encrypted: true
                });

                pusher.subscribe('test')
                    .bind('App\\Events\\UserHasRegistered', this.addUser);
        },

        methods: {
            addUser: function(user){
                console.log(user);
                this.users.push(user);
            }
        }
    });

        </script>
    </body>
</html>
