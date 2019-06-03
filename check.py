import subprocess as sub

file = open("data/data.txt")

data = file.read()

rst = sub.Popen("gcc code.c -o code", stdin=sub.PIPE, stdout=sub.PIPE, stderr=sub.STDOUT, shell=True)

rst.wait()

codeerr = rst.stdout.read()

if codeerr != "":
    print codeerr
    exit()

rst = sub.Popen("gcc data/answer.c -o answer", shell=True)

rst.wait()

code = sub.Popen("./code", stdin=sub.PIPE, stdout=sub.PIPE, stderr=sub.STDOUT, shell=True)

out, err = code.communicate(input=data)

answer = sub.Popen("./answer", stdin=sub.PIPE, stdout=sub.PIPE, stderr=sub.STDOUT, shell=True)

ans, err = answer.communicate(input=data)

if ans != out:
    print "wrong answer"
else:
    print "accept"




