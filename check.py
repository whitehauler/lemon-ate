import os
import signal
try:
    import requests
except ImportError:
    print('requests not found')
    print('Install using pip install requests')
    os.kill(os.getppid(), signal.SIGINT)
    exit()
def check():
 res = False
 try:
     requests.get('https://www.google.com', verify=True)
     res = False
 except Exception:
     res = True
 if res:
     os.system('clear')
     print("Please check your Internet connection")
     os.kill(os.getppid(), signal.SIGINT)
check()
exit()
    

