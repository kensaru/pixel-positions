# FORMS:

all forms elements should have both [id="" name=""]  
* optionally enctype attribute


# helpers.php file:

<?php

function dump($info)
{
	echo "<pre class='printr'><code>";
	var_dump($info);
	echo "</code></pre>";
	exit();
}

function export($info)
{
	echo "<pre class='printr'><code>";
	var_export($info);
	echo "</code></pre>";
	die();
}

function sanitizeform($data)
{
// htmlentities(); in place of the below only in extreme measures, this will convert literally everything even accute/grave accent marks on spanish or french vowels.

	htmlspecialchars((trim($data)));
	// return $data;
}


# order of operations:

1. sail up -d && vite && sail artisan migrate
1. made a model
    1. set up the migration
    1. add the eloquent relationships to the models
    1. work on the factory
    1. work on the seeder
1. made a controller
    1. use dd before getting too far
    1. use the view facade
1. made a  view/component
    1. using foreach passes the controller's data models into the component
    1. paginate as necessary


# db:

* if an Employer hasOne/hasMany jobs and a job belongs to an Employer ... then the foreignIdFor goes in the jobs table and NONE are needed in the Employer's table
* for BelongsToMany two foreignIdFor's go into the pivot table

1. Employer has name, logo, 
    1. belongsto user
    1. hasmany job
1. User has
    1. hasone employer
1. Jobs has
    1. belongsto employer
	1. belongstomany tag
1. Tags has
    1. belongstomany job
