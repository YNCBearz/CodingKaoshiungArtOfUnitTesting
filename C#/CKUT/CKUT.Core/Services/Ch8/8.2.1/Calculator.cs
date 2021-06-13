using System;
using System.Runtime.CompilerServices;
[assembly: InternalsVisibleTo("CKUT.UnitTests")]

namespace CKUT.Core.Services.Ch8._8._2._1
{
    public class Calculator
    {
        private readonly decimal _num1;
        private readonly decimal _num2;

        internal Calculator(decimal num1, decimal num2)
        {
            _num1 = num1;
            _num2 = num2;
        }

        public decimal Calculate(CalculateMethod method)
        {
            switch (method)
            {
                case CalculateMethod.Plus:
                    return PlusTwoNumbers();
                case CalculateMethod.Minus:
                    return MinusTwoNumbers();
                case CalculateMethod.Multiply:
                    return new MultiplyCalculator(_num1, _num2).MultiplyTwoNumbers();
                case CalculateMethod.Divided:
                    return DividedTwoNumbers();
                default:
                    throw new InvalidOperationException($"{nameof(method)} not found");
            }
        }

        private decimal PlusTwoNumbers()
        {
            return _num1 + _num2;
        }
        public decimal MinusTwoNumbers()
        {
            return _num1 - _num2;
        }

        internal decimal DividedTwoNumbers()
        {
            return RoundResult(_num1 / _num2);
        }

        public static decimal RoundResult(decimal result)
        {
            return Math.Round(result);
        }
    }

    public class MultiplyCalculator
    {
        private readonly decimal _num1;
        private readonly decimal _num2;

        public MultiplyCalculator(decimal num1, decimal num2)
        {
            _num1 = num1;
            _num2 = num2;
        }

        public decimal MultiplyTwoNumbers()
        {
            return _num1 * _num2;
        }
    }
}