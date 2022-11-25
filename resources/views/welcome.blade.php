<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pusher Test</title>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
        let registration = null;
        navigator.serviceWorker.register('sw.js');
        Notification.requestPermission(function(result) {
            if (result === 'granted') {
                navigator.serviceWorker.ready.then(function(reg) {
                    registration = reg;
                });
            }
        });
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('ea9500a9bd60caef42e3', {
            cluster: 'eu'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('pusher:subscription_succeeded', function(data) {
            alert('successfully subscribed!');
        });

        channel.bind('notification-event', function(data) {
            alert('erin');
            registration.showNotification(data);
        });
    </script>
</head>

<body>
<h1>Pusher Test</h1>
<p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
</p>
</body>

</html>
