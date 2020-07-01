<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //

    protected	$table	=	'yourCustomTableName';

    public	function	user()
{
				return	$this->belongsTo('App\User');
}
    public	function	getTitle()
{
				return	$this->title;
}

}