<div ng-controller="AuthorEditController">

      <img ng-style="loading" src='Images/system/loader.gif' style="display:block;margin:auto;margin-top:5%;">

      <div ng-style="display" id='formWrapper' style="padding:3%; border:1px solid lightgrey;">

        <h4>Edit Author</h4>

        <a href="#/Authors">
            <span style="font-size:40px;color:grey;" class ="glyphicon glyphicon-circle-arrow-left"></span>
        </a>


        <br>

                  <div class="form-group">
                        <label for="name">
                          Name:
                        </label>

                          <input id="name" class="form-control" type="text" ng-model="author.name" name="name">

                  </div>

                  <div class="form-group">
                        <label for="email">
                          E Mail:
                        </label>

                          <input id="email" class="form-control" type="email" ng-model="author.email" name="email">

                  </div>


                  <div class="form-group">
                        <label  for="bio">
                          Bio:
                        </label>

                          <textarea id="bio" class="form-control" ng-model="author.bio" name="bio">

                  </div>

                  <div class="form-group">

                          <button class="btn btn-default" ng-click="btnSave(author)">Save</button>

                  </div>

      </div>



</div>
