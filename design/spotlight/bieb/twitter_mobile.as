﻿package{	// Here are all the items you're going to need 	import flash.display.MovieClip;	import flash.events.Event;	import flash.net.URLLoader;	import flash.text.TextField;	// import flash.text.TextFieldAutoSize;	import flash.net.URLLoader;	import flash.net.URLRequest;	import flash.events.Event;		public class twitter_mobile extends MovieClip	{		private var twitterXML:XML; // This holds the xml data				public function twitter_mobile()		{			// Fire the loadTwitterXML method, passing it the url to your Twitter info:			// loadTwitterXML("http://twitter.com/statuses/user_timeline/" + myTwitterID + ".xml");			loadTwitterXML("http://search.twitter.com/search.atom?q=mobile+wireless+telecom");		}				private function loadTwitterXML(URL:String):void		{			var urlLoader:URLLoader = new URLLoader();			// When all the junk has been pulled in from the url, we'll fire finishedLoadingXML:			urlLoader.addEventListener(Event.COMPLETE, finishLoadingXML);			urlLoader.load(new URLRequest(URL));					}				private function finishLoadingXML(e:Event = null):void		{			// All the junk has been pulled in from the xml!  Hooray!			// Remove the eventListener as a bit of housecleaning:			e.target.removeEventListener(Event.COMPLETE, finishLoadingXML);						// Populate the xml object with the xml data:			twitterXML = new XML(e.target.data);			showTwitterStatus();		}				private function showTwitterStatus():void		{			// Uncomment this line if you want to see all the stuff Twitter sends you:			trace(twitterXML);						// Prep the text field to hold our latest Twitter update:			twitter_txt.wordWrap = true;			twitter_txt.editable = false;						// Populate the text field with the list of 10 updates:			var twitter_txt_value:String = "<p><b>" + twitterXML.child(10).child(10).child(0) + "</b> " + twitterXML.child(10).child(4) + "</p>";			twitter_txt_value += "<p><font size='6'>&nbsp;</font></p>";			twitter_txt_value += "<p><b>" + twitterXML.child(11).child(10).child(0) + "</b> " + twitterXML.child(11).child(4) + "</p>";			twitter_txt_value += "<p><font size='6'>&nbsp;</font></p>";			twitter_txt_value += "<p><b>" + twitterXML.child(12).child(10).child(0) + "</b> " + twitterXML.child(12).child(4) + "</p>";			twitter_txt_value += "<p><font size='6'>&nbsp;</font></p>";			twitter_txt_value += "<p><b>" + twitterXML.child(13).child(10).child(0) + "</b> " + twitterXML.child(13).child(4) + "</p>";			twitter_txt_value += "<p><font size='6'>&nbsp;</font></p>";			twitter_txt_value += "<p><b>" + twitterXML.child(14).child(10).child(0) + "</b> " + twitterXML.child(14).child(4) + "</p>";			twitter_txt_value += "<p><font size='6'>&nbsp;</font></p>";			twitter_txt_value += "<p><b>" + twitterXML.child(15).child(10).child(0) + "</b> " + twitterXML.child(15).child(4) + "</p>";			twitter_txt_value += "<p><font size='6'>&nbsp;</font></p>";			twitter_txt_value += "<p><b>" + twitterXML.child(16).child(10).child(0) + "</b> " + twitterXML.child(16).child(4) + "</p>";						twitter_txt.htmlText = twitter_txt_value;		}	}}