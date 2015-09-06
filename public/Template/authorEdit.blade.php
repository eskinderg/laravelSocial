<div ng-controller="AuthorEditController">



    <a href="#/Authors">
        <span style="font-size:40px;color:grey;" class ="glyphicon glyphicon-circle-arrow-left"></span>
    </a>


<br><br>

<div class="form-group">
      <label class="col-md-4 control-label" for="name">
        Name:
      </label>

      <div class="col-md-6">
        <input id="name" class="form-control" type="text" ng-model="author.name" name="name">
      </div>

</div>
<br><br>
<div class="form-group">
      <label class="col-md-4 control-label" for="email">
        E Mail:
      </label>

      <div class="col-md-6">
        <input id="email" class="form-control" type="email" ng-model="author.email" name="email">
      </div>

</div>
<br><br>

<div class="form-group">
      <label class="col-md-4 control-label" for="bio">
        Bio:
      </label>

      <div class="col-md-6">
        <input id="bio" class="form-control" type="text" ng-model="author.bio" name="bio">
      </div>

</div>

<div class="form-group">
      <label class="col-md-4 control-label" for="bio">
        &nbsp;
      </label>

      <div class="col-md-6">
        <br>
        <button class="btn btn-default" ng-click="btnSave(author)">Save</button>
      </div>

</div>





</div>
