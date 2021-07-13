<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="col-6">
    <form action="/data-handle/form" method="post">
        @csrf
        <div>
            <input name="eventName" type="text" placeholder="EventName">
        </div>
        <div class="col-12">
            <input name="bandNames" type="text" placeholder="BandNames">
        </div>
        <div><input name="startDate" type="text" placeholder="StartDate">
        </div>
        <div><input name="endDate" type="text" placeholder="EndDate">
        </div>
        <div><input name="portfolio" type="text" placeholder="Portfolio">
        </div>
        <div><input name="ticketPrice" type="text" placeholder="TicketPrice">
        </div>
        <div><input name="status" type="text" placeholder="Status"></div>
        <button type="submit">submit</button>
    </form>
</div>
</body>
</html>
