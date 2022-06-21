# function that returns the index of a specific element within O(log(n)) time.

a = [10, 23, 45, 92, 101, 102, 103, 10001]


def check():
    res = ""
    b = int(input("Input number: "))
    flag = 0
    while flag < len(a):
        if a[flag] == b:
            res = a[flag]
            break
        else:
            res = "Null"
        flag += 1
    return print(res)


# run function
check()


