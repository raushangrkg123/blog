@php
$user="Raushan Gupta";
$names=["Raushan","john"];
@endphp

<script>
    // var data =@json($user);
    // console.log(data);

    // var name=@json($names);
    // console.log(name)

    var data=@json($names);
     data.forEach(function(entry){
        console.log(entry);
     });
</script>