# User-profile

Extensible user-profile for infyom package.

1. Run the composer command

```
	composer require reta110/user-profile 1.0
```

2. Add the Service Provider in config/app.php

```
	Reta110\UserProfile\UserProfileServiceProvider::class,
```

3. Replace the link in the file resources/views/layouts/app.blade..php

```
	<a href="{!! route('user-profile.edit') !!}" class="btn btn-default btn-flat">Profile</a>
```