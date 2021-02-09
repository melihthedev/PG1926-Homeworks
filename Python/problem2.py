
def checkMail(mail):
    if "@" in mail:
        return "Mail adresiniz doğru"
    else:
        return "Mail yanlış"


mail = checkMail("melihcetin06@hotmail.com")
print(mail)
