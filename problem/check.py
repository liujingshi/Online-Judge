import subprocess as sub
import sys

pro = sys.argv[1]

file = open("./problem/"+pro+"/data.txt")

data = file.read()

rst = sub.Popen("gcc ./problem/code.c -o ./problem/code", stdin=sub.PIPE, stdout=sub.PIPE, stderr=sub.STDOUT, shell=True)

rst.wait()

codeerr = rst.stdout.read()

if codeerr != "":
    print codeerr
    exit()

rst = sub.Popen("gcc ./problem/"+pro+"/answer.c -o ./problem/answer", shell=True)

rst.wait()

code = sub.Popen("./problem//code", stdin=sub.PIPE, stdout=sub.PIPE, stderr=sub.STDOUT, shell=True)

out, err = code.communicate(input=data)

answer = sub.Popen("./problem//answer", stdin=sub.PIPE, stdout=sub.PIPE, stderr=sub.STDOUT, shell=True)

ans, err = answer.communicate(input=data)

if ans != out:
    print "wrong answer"
else:
    print "accept"




