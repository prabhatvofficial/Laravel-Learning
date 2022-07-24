<x-header componentName="Users"/>

<!-- If Statement -->
<!-- @//if($name == 'Prabhat')
    <h1>User : Hi, {//{$name}}</h1>
@//else
    <h1>User: Hi, {//{$name}}</h1>
@//endif -->

<!-- Using View in View -->

@include('inner')
<!-- CSRF -->
@csrf
<!-- USing Foreach -->

<!-- @//foreach($data as $name)
    <p>{//{$name}}</p>
@//endforeach -->

<!-- Using JS in PHP -->

<!-- <script>
    var data = @//json($data);
    console.log(data);
</script> -->

<!-- Form Submission -->

<!-- Middleware -->


