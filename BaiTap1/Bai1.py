
def findMax5(a):
    b = []
    a.sort()# sap xep
    n = 1
    while (n < 6):
        b.append(a[len(a)-n])
        n = n+1
    print(b)


def findFrequent(a):
    b = []
    c = []
    for i in range(len(a) - 1):
        b.append(a.count(a[i]))

    for i in range(len(b) - 1):
        if b[i] == max(b):
            c.append(a[i])#them phan tu cuoi vao list
    print('gia tri xuat hien nhieu nhat = ', c[0])


def main():
    lst1 = [3, 4, 5, 3, 2, 3, 10, 11]
    lst2 = [14, 12, 38, 17, 10, 36, 12, 29, 45, 34, 48, 22]
    lst3 = [10, 11, 2, 30, 22, 6, 8, 9, 11, 12, 22]
    findLst1 = [3, 7, 3]
    findLst2 = ['null','null', 'true', 'test']
    findLst3 = ['false','false','false', 'test', 'hello']

    findMax5(lst1)
    findMax5(lst2)
    findMax5(lst3)
    print('----------')
    findFrequent(findLst1)
    findFrequent(findLst2)
    findFrequent(findLst3)


if __name__ == "__main__":
    main()