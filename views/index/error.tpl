{extends file='../layout/main.tpl'}

{block name=body}
<div class="jumbotron">
    <h1>Attenstion please!</h1>
    <p class="lead">there is an error!</p>
    <div class="body-content">
{$e.msg}|{$e.code}
    </div>
</div>
{/block}

