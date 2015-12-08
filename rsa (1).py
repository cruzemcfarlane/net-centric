def pub_private(p,q):
    n = p*q
    f = (p-1)*(q-1)

def mod(a,b):
    if(a < b):
        return 'invalid'
    elif (a >= b):
        while (a >= b):
            a = a - b
        return a


def Extended_Euclid(m,n):
    A1, A2, A3 = 1, 0, m
    B1, B2, B3 = 0, 1, n
    while True:
        if B3 == 0:
            print 'No inverse'
            return A3
        elif B3 == 1:
            print then
            return B2 + 'B2 = n-1 mod m'
        Q = A3/B3

    T1, T2, T3 = A1- Q * B1, A2 - Q * B2, A3 - Q * B3
    A1, A2, A3 = B1, B2, B3
    B1, B2, B3 = T1, T2, T3

def gcd(a, b):
    while b:
        a, b = b, a%b
    return a

def egcd(a, b):
    x,y, u,v = 0,1, 1,0
    while a != 0:
        q, r = b//a, b%a
        m, n = x-u*q, y-v*q
        b,a, x,y, u,v = a,r, u,v, m,n
    gcd = b
    return gcd, x, y
