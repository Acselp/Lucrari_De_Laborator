#include<iostream>
#include<cstdlib>
#include<conio.h>
#include<cmath>
#include<iomanip>

using namespace std;

const float e = 2.71;
class optim
{
public:
    float Functia(float x, float y) const;
    void input();
    void gradient();
    void met_HS();
private:
    float a,b,alfa,gama,delta,epsilon,X, Y, Zx, Zy, Gx,Gy;
};
float optim::Functia(float x, float y) const
{
    return pow(e,(-(x*x+y*y))) +(a*x*x +b*y*y);
}
void optim::input()
{
    std::cout<<"Introduceti a: "; cin>>a;
    std::cout<<"Introduceti b: "; cin>>b;
}
void optim::gradient()
{
    Gx = (-2 * X * exp(-((X * X) + (Y * Y)))) * ((7 * (X * X)) + (2 * (Y * Y)) - 7);
        
    Gy = (-2 * Y * exp(-((X * X) + (Y * Y)))) * ((7 * (X * X)) + (2 * (Y * Y)) - 2);

}
void optim::met_HS()
{
    int k=0;
    int Np=0;
    double Ak, dx, dy, X1 = 0.1, Y1 = 0.2, G1x = 0, G1y = 0;

    gradient();
    while(Gx!=0 && Gy!=0)
    {
        ++Np;
        if(k++==0)
        {
            dx=-Gx;
            dy=-Gy;
        }
        else
        {
            dx=dx*(Gx*Gx+Gy*Gy)/(G1x*G1x+G1y*G1y)-Gx;
            dy=dy*(Gx*Gx+Gy*Gy)/(G1x*G1x+G1y*G1y)-Gy;
        }
        Ak=-(Gx*dx+Gy*dy)/2*dx*dx+4*dx*dy+2*3*dy*dy;
        X1=X;
        Y1=Y;
        G1x=Gx;
        G1y=Gy;
        X=X+Ak*dx;
        Y=Y+Ak*dy;
        if(X==X1 && Y==Y1) break;
        gradient();
    }
    std::cout<<"\n    METODA H-S";
    std::cout<<"\nValoarea functiei in punctul ("<< setprecision(6) << fixed << X<<", "<<Y<<") = "<<Functia(X,Y)<<endl;
    std::cout<<"\nValoarea gradientului in punctul gasit: grad(" << setprecision(6) << fixed << X << ", " << Y <<") = " << this->Functia(Gx, Gy) << endl;
    std::cout<<"Numarul de iteratii: "<<Np;
}
int main()
{
    system("cls");
    optim ob;
    ob.input();
    ob.met_HS();
    getch();
}
