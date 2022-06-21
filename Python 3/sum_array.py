# function that counts the sum of all elements inside the array within O(1) time.

arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]


def count():
    f = 0
    for i in arr1:
        f = f + i
    return print(f)


# run function
count()
