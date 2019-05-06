<div class="panel panel-default">
        <div class="panel-heading" role="tab" id="{{ isset($title) ? str_slug($title) :  'permissionHeading' }}">
            <h4 class="panel-title">

            </h4>
        </div>
        <div >
            <div class="panel-body">
                <div class="row">
                    @foreach($permissions as $perm)
                        <?php
                            $per_found = null;

                            if( isset($role) ) {
                                $per_found = $role->hasPermissionTo($perm->name);
                            }

                            if( isset($user)) {
                                $per_found = $user->hasDirectPermission($perm->name);
                            }
                        ?>

                        <div class="col-md-3">
                            <div class="checkbox">
                                <label class="{{ str_contains($perm->name, 'delete') ? 'text-danger' : '' }}">
                                    {!! Form::checkbox("permissions[]", $perm->name, $per_found, isset($options) ? $options : []) !!} {{ $perm->name }}
                                </label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
