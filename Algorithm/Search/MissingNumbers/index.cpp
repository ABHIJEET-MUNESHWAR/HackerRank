#include <cmath>
#include <cstdio>
#include <vector>
#include <iostream>
#include <algorithm>
using namespace std;

int h[10001]={0};

int main(){
    int n,m,t,i;
    cin >> n;
    i=n;
    while(i--)
    {
        cin >> t;
        h[t]++;
    }
    cin >> m;
    i=m;
    while(i--)
    {
        cin >> t;
        h[t]--;
    }

    for(i=0;i<10001;i++)
    {
        if(h[i]<0)
            cout << i << " ";
    }
    return 0;
}
