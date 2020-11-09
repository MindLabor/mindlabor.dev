---
title: "Getting Started"
url: "getting-started"
date: 2020-11-06

resources:
  - title: ""
    url: "#"
---

In this project, we will write a discord bot that plays music from youtube and add many cool features as we go. You don't have to know how to create a simple Discord bot to follow this tutorial. But I strongly recommend that you know object-oriented javascript. With that said, let's get started: First of all, we need to tell Discord that we want to create a new bot. Go to the [Discord Developer Portal](https://discord.com/developers/applications) and

1. Create a new application and give it a catchy name. I am going with *SciTune*. 
2. Go to **Bot**, then add a bot. You can change the icon and username.
3. Go to **OAuth2** and check the **bot checkbox**.
4. Also check the following checkboxes: **Send Messages**, **Manage Messages**, **Connect** and **Speak**.
5. Copy the generated URL into your browser. 

At this stage, we can add the bot to our server. If you don't have a server, go ahead and create one first. Your bot should now be on your server.

## Setting things up
Now that our bot is on the server, we can start coding. Make sure that you have npm and node 14 or higher installed. Open a terminal and go to the folder in which you want to work in.

Run:
```batch
mkdir [your-bot-name]
cd [your-bot-name]
npm install discord.js ffmpeg fluent-ffmpeg @discordjs/opus ytdl-core --save
```
If you get an *"Cannot read property 'matches' of undefined"* error, try splitting the last command up:
```batch
npm install discord.js --save
npm install ffmpeg fluent-ffmpeg @discordjs/opus ytdl-core --save
```

We've installed all the libraries that we are going to need. Create two new files in your project: *index.js* and *config.json*. Copy the following lines into *config.json*:
```json
{
	"TOKEN": "MTUzODk...",
	"PREFIX": "#"
}
```
Replace the token with yours from the [Discord Developer Portal](https://discord.com/developers/applications) (Bot -> Build-A-Bot -> Token -> Copy). The prefix value is used to indicate a command. The bot plays music when it receives the message "#play ..." for instance but not if it is "play ...". If you have multiple bots on your server, you shouldn't use a prefix that another bot uses.

## Let's start coding
Now comes the interesting stuff. Go to index.js and write the following:
```js
const Discord = require("discord.js");
const Config = require("./config.json");
global.client = new Discord.Client();

// Login and bind event listener on ready, disconnect and message
client.login(Config.TOKEN);
client.on("ready", () => console.log("ready"));
client.on("disconnect", () => console.log("disconnect"));
client.on("message", message => console.log(message.content));
```
The code imports the discord.js library and our config.json file. Then it authenticates the bot using the token from config.json. When the bot is ready and logged in, we output "ready" to the console, and if it receives a message, the message is logged to the console as well. Start the bot with `node index.js` and write a message in any public text channel. The output should be something like this:
```bash
$ node index.js 
ready
Hello, World!
```
It's that easy to make a discord bot. In the next lesson, we are creating the #join and #leave commands that let our bot connect and disconnect from a voice channel. 
