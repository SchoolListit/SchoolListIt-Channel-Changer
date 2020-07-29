# Foobar

SchoolListIt Channel Changer streamlines teacher - parent communication and enables tracking and analytics for those communications. This feature aims to leverage the learnings gained through marketing and marketing automation and put that knowledge to work streamlining and automating parent - teacher communication. 

Using the right technology, we can do a better job ensuring that the message a teacher sends is not only received, but received and understood by parents. This technology has been around in marketing for a while and is quite mature - teachers just have no idea that it exists. They are gonna love this!

is a WordPress plugin which facilitates using the SchoolListIt Application channel changers. It is through this plugin that SchoolListIt is able to send broadcast and individual messages from teacher (or school) to a student's network of adults and specifically tailor those communications to leave the teachers preferred channel and arrive in the Parent's preffered channel.

We know that parents are splintered onto many different channels, and teachers have trouble communicating in so many different ways. But, parents are busy and also monitoring many channels. The channel changer facilitates parental involvement by meeting parents where they are and streamlining that for the school administration and teachers. 

On plugin activation, a notification is sent to the SchoolListit app asking each connected user to choose thier preferred channel. From there, this plugin acts as a channel changer changing the originating channel to the destination channel via Twilio's PHP SDK. Establishing a 'classroom' set of numbers and contact information liberates the teachers personal cell phones, social profiles, and emails from parent communications and enables the school and teacher to better keep track communications between parent and teacher as these are naturally stored in twilio's history and analytics. 

## Installation

Download zip file
Open your wordpress dashboard - the wp-admin page on most sites - and click upload.
Install and Activate.

### Settings
go through the setup and complete all settings required within the admin dashboard. This includes providing access to social accounts, etc needed for twilio to send messages on your behalf. 

### That's it.
You now have the 'assignments' post type and all the custom taxonomies needed to share assignments and due dates with SchoolListIt. 

The Rest API should be live and working. To test that, visit yoursite.com/wp-json/schoollistit/v2/lesson-plans

* NOTE: many sites have globally disabled the REST API. If you've done that this plugin won't work.

## Usage

NOTE: Twilio account required

NOTE: Any channel that you enable must have a 'classroom' profile. For example, if you'd like to enable the messenger channel, you must have a messenger account which twilio can use to send messages on your behalf. 

NOTE: You will need your server admin team to composer require the Twilio SDK or this plugin will NOT work. 

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[GPL2+](http://www.gnu.org/licenses/gpl-3.0.html) 
 SchoolListIt Channel Changer is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 2 of the License, or
 any later version.

SchoolListIt Channel Changer is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with SchoolListIt Channel Changer. If not, see [GPL2+](http://www.gnu.org/licenses/gpl-3.0.html) 
