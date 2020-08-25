# SchoolListIt Channel Changer

## Streamlines parent teacher communication
SchoolListIt Channel Changer streamlines teacher - parent communication and enables automation, tracking, and analytics for those communications. This feature aims to leverage the learnings gained through marketing and marketing automation and put that knowledge to work streamlining and automating parent - teacher communication. 

Using the right technology, we can do a better job ensuring that the message a teacher sends is not only received, but received and understood by parents. This technology has been around in marketing for a while and is quite mature - teachers just have no idea that it exists. 

NOTE: at this point this app is only designed to work for two pilot use cases and not scalable or complete. We are in testing mode.
- it is functioning mostly as a bulk text registration and forwarding system
- teacher texts class, forwards to all parents and students who are registered and approved for the group
- parent texts class, forwards to the teacher number

**Teachers and parents are gonna love this!**

## How it works
Through this plugin, SchoolListIt is able to send broadcast and individual messages from teacher (or school) to their network of followers and tailor those communications to originate in the teachers preferred channel and arrive in the Parent's preffered channel.

We know that parents are splintered onto many different channels, and teachers have trouble communicating in so many different ways. But, parents are busy and also monitoring many channels. The channel changer facilitates parental involvement by meeting parents where they are and streamlining that for the school administration and teachers. 

- teachers can stay in thier prefferred format
- parents never miss important messages because they were sent via a channelthey dont really monitor
- all communications can be tracked
- analytics can provide feedback on the effectiveness of parent - teacher communication
- teachers have access to communication automation via direct messaging, trigger workflows, and broadcasting tools

# Installation

1.  zip file
2. Open your wordpress dashboard - the wp-admin page on most sites - and click upload.
3. Install and Activate.

## Activation
On plugin activation, a notification is sent to the SchoolListit app asking each connected user to choose thier preferred channel. From there, this plugin acts as a channel changer changing the originating channel to the destination channel via Twilio's PHP SDK. Establishing a 'classroom' set of numbers and contact information liberates the teachers personal cell phones, social profiles, and emails from parent communications and enables the school and teacher to better keep track communications between parent and teacher as these are naturally stored in twilio's history and analytics. 

### Settings
Follow plugin setup and complete all settings required within the admin dashboard. This includes providing access to social accounts, etc needed for twilio to send messages on your behalf. 

### That's it.
You now have access to the channel changer. To create outgoing messages, do that through the Channel Changer dashboard page. All incoming messages will arrive in your referred channel so you never miss a message from a parent.

## Usage

NOTE: Twilio account required

NOTE: Any channel that you enable must have a 'classroom' profile. For example, if you'd like to enable the messenger channel, you must have a messenger account which twilio can use to send messages on your behalf. 

NOTE: You may need your server admin team to get involved. This plugin requires the Twilio SDK via composer to work. Sometimes certain hosts have blocked permissions for this setup automatically.

## Contributing
TODO: everything. I've created this very minimal approach to building plugins wihtout so much boilerplate abstraction. So, we are set up to build this, but it is not built. 

TODO: I've got older plugins I've built for marketing which have all the twilio integrations, but we need to carefully consider how to best use this tech without overwhelming teachers. My gut tells me that the plugin needs to be very opinioonated with few options and no administration. Teachers dont have time to mess with it...they just need to save time.

OPPORTUNITY: There is an opportunity for an ecosystem company to get involved here providing the 'setup' service for teachers and schools...establishing social accounts, reading analytics, providing feedback, creating automation and trigger campaigns for teachers. 

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
